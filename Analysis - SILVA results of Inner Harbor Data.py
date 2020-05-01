#!/usr/bin/env python
# coding: utf-8

# In[1]:


#Code from Andy at BUGSS -- his process of the data, not Alyssa or Josh

import pandas as pd


# In[2]:


dataFile = "../harbor_draft1---ssu---otus.csv"
col_names=[
    'sample_name',
    'cluster_id',
    'cluster_acc',
    'sequences',
    'avg_seq_ident',
    'similarity',
    'sequence',
    'ncbi_class',
    'silva_class'
    ]


# In[3]:


data = pd.read_csv(dataFile,sep='\t',skiprows=2,header=None,names=col_names)


# In[60]:


data.head(5)


# In[5]:


data.describe()


# In[6]:


data.shape


# # Are there aubundant species in the bottom quartile of similarity?

# ### List unique sample names

# In[7]:


print(data.sample_name.unique())
print(len(data.sample_name.unique()))


# ### Define list of samples ordered by data, site, and sub-sample.

# In[8]:


DataSetList = [
    'GSF2129-May-1-2_merged',
    'GSF2129-May-1-3_merged',
    'GSF2129-May-2-1_merged',
    'GSF2129-June-2-2_merged',
    'GSF2129-July17-1-3_merged',
    'GSF2129-Aug-1-3_merged',
    'GSF2129-Sept-1-1_merged',
    'GSF2129-Sept-1-2_merged',
    'GSF2129-Sept-2-2_merged',
    'GSF2129-Sept-2-3_merged',
    'GSF2129-Oct17-S1-2_merged',
    'GSF2129-Oct17-S2-1_merged',
    'GSF2129-Oct17-S2-2_merged',
    'GSF2129-Oct17-S2-3_merged',
    'GSF2129-Nov-17-1-3_merged',
    'GSF2129-Nov17-1-2_merged',
    'GSF2129-Nov17-S2-2_merged',
    'GSF2129-Dec-17-1-2_merged',
    'GSF2129-Dec17-2-1_merged',
    'GSF2129-Dec17-2-2_merged'
    ]
print(DataSetList)
print(len(DataSetList))


# ### Make sample_name a Categorical colunm with order specified in DataSetList

# In[9]:


data['sample_name'] = pd.Categorical(data['sample_name'], DataSetList)


# ### Sort data by sample_name

# In[10]:


data.sort_values(by='sample_name',axis=0,inplace=True)


# In[11]:


data.head(5)


# ### Save the dataframe

# # Humans in one of the samples?

# In[12]:


mask = data.ncbi_class.str.contains('Homo ')
data[mask].to_csv("HumansInTheHarbor.csv")
data[mask]


# ```
# NCBI
# 
# Taxonomy ID: 9606 (for references in articles please use NCBI:txid9606)
# 
# Scientific name: Homo sapiens Linnaeus, 1758
# 
# SILVA
# 
# The SSU Ref NR 99 132 dataset, or subsets thereof, can be downloaded via the Opens internal link in current windowBrowser and as ARB database file in the common Opens internal link in current window.arb format.
# 
# In the SILVA Archive (release_132/Exports) also FASTA exports of the NR dataset are available.  In the archive you can also find older (smaller!) versions of the SSU Ref NR dataset (ARB database files and FASTA exports). We have started producing SSU Ref NR files with SILVA release 102.
# 
# 
# 132 and 123 are assumed to be taxonomy version numbers.
# 
# 9606 and 13155 are assumed to be OTU reference numbers.
# 
# ```

# ### Back to work

# #### From https://www.biostars.org/p/351024/: ...you're supposed to use the mapping file tax_slv_[ls]su_VERSION.txt, for example tax_slv_ssu_132.txt (https://www.arb-silva.de/fileadmin/silva_databases/current/Exports/taxonomy/tax_slv_ssu_132.txt) to resolve the rank of each class.

# #### How many SILVA versions do we have?

# In[13]:


pd.set_option('display.max_colwidth',175)


# In[14]:


def parse_taxon_ncbi(rec):
    classification = rec.loc["ncbi_class"]
    # print("DEBUG:",classification,"\n",classification.split('|'))
    (tax_sys,tax_vers,tax_id,tax_branch) = classification.split('|')
    dct = {
        "NCBI_tax_sys":tax_sys,
        "NCBI_tax_vers":tax_vers,
        "NCBI_tax_id":tax_id,
        "NCBI_Branch":tax_branch
    }
    # print("DEBUG:",dct)
    return dct

def parse_taxon_silva(rec):
    classification = rec.loc["silva_class"]
    (tax_sys,tax_vers,tax_id,tax_branch) = classification.split('|')
    dct = {
        "SILVA_tax_sys":tax_sys,
        "SILVA_tax_vers":tax_vers,
        "SILVA_tax_id":tax_id,
        "SILVA_Branch":tax_branch
    }
    return dct

if __name__ == '__main__':
    print(data.iloc[100,:])
    print(parse_taxon_ncbi(data.iloc[100,:]))
    print(parse_taxon_silva(data.iloc[100,:]))
    print()
    print(data.iloc[150,:])
    print(parse_taxon_ncbi(data.iloc[150,:]))
    print(parse_taxon_silva(data.iloc[150,:]))


# In[15]:


SILVA_cols = ["SILVA_tax_sys","SILVA_tax_vers","SILVA_tax_id","SILVA_Branch"]
NCBI_cols = ["NCBI_tax_sys","NCBI_tax_vers","NCBI_tax_id","NCBI_Branch"]


# In[16]:


data.apply(parse_taxon_ncbi,axis=1,result_type='expand')[NCBI_cols].head(5)


# In[17]:


data[NCBI_cols] = data.apply(parse_taxon_ncbi,axis=1,result_type='expand')[NCBI_cols]


# In[18]:


data[SILVA_cols] = data.apply(parse_taxon_silva,axis=1,result_type='expand')[SILVA_cols]


# In[19]:


data.head(5)


# In[20]:


data.to_pickle('data.FirstPass.pickle')
#


# In[21]:


get_ipython().system('pwd')


# In[22]:


otu_counts_by_sample = data['SILVA_tax_id'].groupby(data['sample_name']).value_counts()
top_otus_by_sample = otu_counts_by_sample.groupby('sample_name').nlargest(5)
print(top_otus_by_sample.head(5))
print(top_otus_by_sample.index.names)


# In[23]:


top_otus_by_sample.reset_index(level=0,drop=True,inplace=True)


# In[45]:


print(top_otus_by_sample.head(5))
print(top_otus_by_sample.index.names)


# In[46]:


top_otus_vs_sample = top_otus_by_sample.unstack(level=0,fill_value=0)
print(top_otus_vs_sample.shape)


# In[47]:


get_ipython().run_line_magic('pylab', 'inline')


# In[48]:


import seaborn as sns


# In[49]:


figure(figsize=(25,25))
sns.heatmap(top_otus_vs_sample);
yticks(rotation=0);


# In[50]:


data[['sample_name','SILVA_tax_id','sequences']][data['SILVA_tax_id']=='10099'].head(40)


# In[53]:


data[['sample_name','SILVA_tax_id','sequences']].groupby(['sample_name','SILVA_tax_id']).sum()


# ### Sum number of sequences by sample_name and SILVA_tax_id

# In[24]:


total_sequences_by_sample = data.pivot_table(values='sequences',index='SILVA_tax_id',columns='sample_name',aggfunc=sum,fill_value=0)
#top_otus_by_sample = otu_counts_by_sample.groupby('sample_name').nlargest(5)

# print(total_sequences_by_sample.tail(5))
#print(top_otus_by_sample.index.names)


# In[25]:


get_ipython().run_line_magic('pylab', 'inline')


# In[26]:


import seaborn as sns


# In[27]:


figure(figsize=(25,75))
sns.heatmap(total_sequences_by_sample,cmap='cubehelix');
yticks(rotation=0);


# In[28]:


sample_sums = total_sequences_by_sample.apply(sum)
pct_sample_sums = sample_sums/sample_sums.sum()
mask = pct_sample_sums >=.03

fig, ax = subplots(nrows=2, ncols=1)
figsize(5,10)
sample_sums[mask].plot(kind='bar',ax=ax[0]);
pct_sample_sums.plot(kind='bar',ax=ax[1]);


# In[52]:


otu_sums = total_sequences_by_sample.apply(sum,axis=1)
pct_otu_sums = otu_sums/otu_sums.sum()
mask = pct_otu_sums >=.01

figsize(25,10)
fig, ax = subplots(nrows=2, ncols=1)
otu_sums[mask].plot(kind='bar',ax=ax[0]);
pct_otu_sums.plot(kind='bar',ax=ax[1]);

otu_sums[mask]


# ### Make a list of tax ids for sensible names

# In[30]:


top_total_sequences_by_sample = total_sequences_by_sample[mask]
top_total_sequences_by_sample.shape


# In[31]:


figure(figsize=(25,15))
sns.heatmap(top_total_sequences_by_sample,cmap='rocket');
yticks(rotation=0);


# In[32]:


silva_otu_lookup_table = data[['SILVA_tax_id','SILVA_Branch']].drop_duplicates()


# In[33]:


def silva_lookup(id):
    print (silva_otu_lookup_table[silva_otu_lookup_table['SILVA_tax_id']==id])
    return

# if __name__ == '__main__':
#    id = input("SILVA id: ")
#    silva_lookup(id)


# In[34]:


normed_total_sequences_by_sample = (total_sequences_by_sample-total_sequences_by_sample.mean())/total_sequences_by_sample.std()
figure(figsize=(25,15))
sns.heatmap(normed_total_sequences_by_sample,cmap='cubehelix');
yticks(rotation=0);


# In[35]:


midpoint = (total_sequences_by_sample.values.max()-total_sequences_by_sample.values.min())/2
figure(figsize=(25,15))
sns.heatmap(total_sequences_by_sample,cmap='cubehelix',center=midpoint);
yticks(rotation=0);


# In[36]:


total_sequences_by_sample.describe()


# # http://alanpryorjr.com/visualizations/seaborn/heatmap/heatmap/

# In[37]:


figure(figsize=(25,150))
sns.heatmap(total_sequences_by_sample,cmap='cubehelix',robust=True,vmin=-1);
yticks(rotation=0);


# In[ ]:





# In[ ]:




