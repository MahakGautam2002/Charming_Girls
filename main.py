from tkinter import *
import pandas as pd
import csv
from tabulate import tabulate

window=Tk()
window.title("main")
data=pd.read_csv("hospital_directory.csv")

dict=data.to_dict()
ft=tabulate(data.head(), headers = 'keys', tablefmt = 'simple',colalign=("right",))
print(ft)
lable1=Label(text=ft)
lable1.pack()

list=[]


input_pin=input("Enter Pincode:")

lable0=Label(text="Result::",font=("Arial",40,"bold"))
lable0.pack()

with open("hospital_directory.csv","r") as file:
    d_reader=csv.DictReader(file)
    for i in d_reader:
        
        #print("Found Entry :")
        if i["Pincode"]==input_pin:
            list.append(i)
            #print(i)
#tab=pd.DataFrame(list,columns=["Hospital_Name","Location","State","Telephone","Address_Original_First_Line"])
tab=tabulate(list, headers = 'keys', tablefmt = 'grid',colalign=("right",))
print(tab)

lable2=Label(text=tab)
lable2.pack()
window.mainloop()

