import pandas as pd
import csv
from tabulate import tabulate

data=pd.read_csv("hospital_directory.csv")
#print(data)
dict=data.to_dict()
print(tabulate(data, headers = 'keys', tablefmt = 'psql'))
#print(dict.)
#
# print(data["pincode"][1])
# print(data["Hospital Name"][1])
# # print(data[1])

list=[]
input_pin=input("Enter Pincode:")
with open("hospital_directory.csv","r") as file:
    d_reader=csv.DictReader(file)
    for i in d_reader:
        #print(i)
        #print("Found Entry :")
        if i["Pincode"]==input_pin:
            list.append(i)
            #print(i)
tab=pd.DataFrame(list,columns=["Hospital_Name","Location","State","Telephone","Address_Original_First_Line"])
print(tab)



# import requests
#
# API_ENDPOINT="/resource/b4d77a09-9cdc-4a5b-b900-8fddb78f3cbe"
# API_KEY="579b464db66ec23bdd000001cdd3946e44ce4aad7209ff7b23ac571b"
#
# parameter={
#     "api-key":API_KEY,
#     "formate":"json",
# }
# resposne=requests.get(url=API_ENDPOINT,params=parameter)
# print(resposne.json())

# importing the modules
from tabulate import tabulate
# import pandas as pd
# import json
# data=pd.read_csv("hospital_directory.csv")
#
# print(data.head(5))
# dict=data.to_dict()
# # json_object = json.dumps(dict, indent = 4)
# # print(json_object)
#
# with open("sample.json","w") as outfile:
#     json.dump(dict,outfile)
#
# # creating a DataFrame
# # dict = {'Name':['Martha', 'Tim', 'Rob', 'Georgia'],
# # 		'Maths':[87, 91, 97, 95],
# # 		'Science':[83, 99, 84, 76]}
# df = pd.DataFrame(dict)
#print(df["Pincode"])
# displaying the DataFrame
#print(tabulate(df, headers = 'keys', tablefmt = 'psql'))

# input_pincode=(input("Enter Pincode of City :"))
# for i in range(1,len(dict)+1):
#     result=input_pincode in dict["Pincode"].values()
#     if result:
#         print(dict["Hospital_Name"][i])
#     print(result)

































# from tkinter import *
# from pandas import *
#
# window=Tk()
# window.title("Medical questions card creator")
# window.config(padx=20,pady=20,width=300,height=450,bg="#80bfff")
#
# que_lab=Label(text="Who is the CheckUp For?",fg="white",bg="#80bfff",font=("Arial",12,"bold"))
# que_lab.grid(row=0,column=0,columnspan=2)
# #
# # def radio_used():
# #     print(radio_state.get())
# #
# # radio_state = IntVar()
# # radiobutton1 = Radiobutton(text="Myself", value=1, variable=radio_state, command=radio_used,bg="#80bfff",font=("Arial",10,"italic"))
# # radiobutton2 = Radiobutton(text="SomeOne Else", value=2, variable=radio_state, command=radio_used,bg="#80bfff",font=("Arial",10,"italic"))
# # radiobutton1.grid(row=2,column=0)
# # radiobutton2.grid(row=3,column=0)
# #
# # myself_img=PhotoImage(file="Screenshot (73).png")
# # myself=Label(image=myself_img,bg="#80bfff",highlightthickness=0)
# # myself.grid(row=2,column=1)
# #
# # someone_img=PhotoImage(file="Screenshot (74).png")
# # someone=Label(image=someone_img,bg="#80bfff",highlightthickness=0)
# # someone.grid(row=3,column=1)
#
#
# data_file=pandas.read_csv("questions_demo.csv")
# que_dict=data_file.to_dict()
#
# A=0
# def next_que():
#         A=a+1
#         new_que_label=Label(text=que_dict["question"][a], fg="white",bg="#80bfff",font=("Arial",12,"bold"))
#         new_que_label.grid(row=0,column=0,columnspan=2)
#         print(a)
#
#
# next_button=Button(text="Next",command=next_que())
# next_button.grid(row=2,column=2)
#
#
# window.mainloop()