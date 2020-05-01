#!/usr/bin/env python
# coding: utf-8

# In[36]:


import pandas as pd


# In[37]:


dataFile = "harbor_draft1---ssu---otus.csv"
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


# In[38]:


data = pd.read_csv(dataFile,sep='\t',skiprows=2,header=None,names=col_names)


# In[39]:


data.ncbi_class[23]

ncbiData = data.copy(True)
ncbiData['ncbiTAX_ID'] = ncbiData.ncbi_class.str.split('|').str.get(2)

ncbiData['silvaTAX_ID'] = ncbiData.silva_class.str.split('|').str.get(2)
ncbiData.drop(columns=['cluster_id', 'cluster_acc', 'avg_seq_ident', 'similarity', 'ncbi_class', 'silva_class'])

ncbiData.groupby("sample_name").count()

#ncbiData['Month'] #= ncbiData.sample_name.str.split('-').str.get(1)
ncbiData['Month'] = ncbiData.sample_name.apply(lambda x: (x.split('-')[1]+'17') if "-17-" in x else x.split('-')[1])
# ncbiData.Month = ncbiData.Month.apply(lambda x: x[:-2] if '17' in x else x)
#ncbiData.groupby('Month').count()
ncbiData


# In[35]:


ncbiData.to_excel("ncbiData.xlsx")  
ncbiData.to_csv('ncbiData.csv')  

