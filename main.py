import pandas as pd
import csv
from tabulate import tabulate

data=pd.read_csv("hospital_directory.csv")

dict=data.to_dict()
print(tabulate(data, headers = 'keys', tablefmt = 'psql'))


list=[]
input_pin=input("Enter Pincode:")
with open("hospital_directory.csv","r") as file:
    d_reader=csv.DictReader(file)
    for i in d_reader:
        #print("Found Entry :")
        if i["Pincode"]==input_pin:
            list.append(i)
            #print(i)
tab=pd.DataFrame(list,columns=["Hospital_Name","Location","State","Telephone","Address_Original_First_Line"])
print(tab)

