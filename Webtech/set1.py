import string 
import os
import pickle

"""
directory_in_str="state\\"

String_List=[]
di={}
List_of_Words=set()
directory=os.fsencode(directory_in_str)
for file in os.listdir(directory): 
    s=os.fsdecode(file)
    fp=open(directory_in_str+s,"r")
    st=fp.read()
    st=st.lower()
    st2=""
    i=0
    L1=["for","a","the","and"]
    while(i<len(st)):
        if (st[i] in string.punctuation or st[i]=='\n') :
            st2+=" "
        else:
            st2+=st[i]   
        i=i+1

    L2=list(st2.split(" "))
    for i in L1:
        for j in L2:
            if(i==j) or (j==''):
                L2.remove(j)
                
    
    d={}
    for i in L2:
        if i not in d.keys():
            d[i]=1

        else:
           d[i]=d[i]+1;

    di[s]=d
    String_List.append(L2)
    L2=[]
    fp.close()

for i in String_List:
    for j in i:
        List_of_Words.add(j)

Inverted_Index={}
for word in List_of_Words:
    d3={}
    for k,v in di.items():
        
        for k1,v1 in v.items():
            if (k1==word):
                d3[k]=v1
                break
    Inverted_Index[word]=d3
            
#print(Inverted_Index)

with open('Inverted_Index.txt', 'wb') as handle:
  pickle.dump(Inverted_Index, handle)"""
  
def rank(query,Inverted_Index):
    d={}
    
    for word in query:
        
        if word in Inverted_Index.keys():
            for file1 in Inverted_Index[word]:
                if file1 not in d.keys():
                    d[file1]=Inverted_Index[word][file1]
                else:
                    d[file1]+=Inverted_Index[word][file1]
            
        else:
            continue

    return (d)
"""
def word_search(word,Inverted_Index):
    word=word.lower()
    if word in Inverted_Index.keys():
        return [filename for filename in Inverted_Index[word].keys()]
    else:
        return []
"""
def query_search(query):
    L=[]
    query=query.lower()
    query=query.split()
    with open('Inverted_Index.txt', 'rb') as handle:
      Inverted_Index = pickle.loads(handle.read())
    dic=rank(query,Inverted_Index)
    #print(dic)
    for file1 in sorted(dic, key=dic.get ,reverse=True):
        L.append(file1)

    return (L)
    """res=[]
    query=query.split()
    for word in query:
        res+=word_search(word,Inverted_Index)
    return list(set(res))
       """
fp=open("data.txt","r")
data=fp.read()
fp.close()

print(query_search(data))
#print("Testing")
  
