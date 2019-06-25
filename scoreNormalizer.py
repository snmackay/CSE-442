
import mysql.connector
import csv

#connect to sql database, handle errors.
def connect():
    print("Connecting")
    try:

        conn = mysql.connector.connect(
            host="tethys.cse.buffalo.edu",
            user="jeh24",
            passwd="50172309",
            database="cse442_542_2019_summer_teame_db"
        )
        if conn.is_connected():
            print("Connection to database established.")
        else:
            print("connection failed.")
        return conn
    except Error as e:
        print(e)
    return conn


def createCSV(inputDict):
    with open("scores.csv", "w") as f:
        writer = csv.writer(f)
        writer.writerow(["Name", "email", "Course", "Group Number", "Normalized Score"])
        writer.writerows(inputDict)

    print("Data exported to scores.csv")

def process():
    mydb=connect()
    mycursor=mydb.cursor()
    mycursor.execute("Select Name, email, course, group_number, recieved_scores FROM cse442")

    myresult = mycursor.fetchall()

    print("Data Gathered")

    rawArr=[]

    for x in myresult:
        rawStr=str(x)
        processedStr=rawStr.split(", ")
        rawArr.append(processedStr)

    for elems in rawArr:
        elems[0]=elems[0][2:]
        elems[0]=elems[0][:-1]
        elems[1]=elems[1][1:]
        elems[1]=elems[1][:-1]
        elems[2]=elems[2][1:]
        elems[2]=elems[2][:-1]
        elems[4]=elems[4][1:]
        elems[4]=elems[4][:-2]
        #for b in elems:
            #print(b)
        #print(" ")
    print("Data Processed")
    ProcessedFull=[]
    student = 0
    for elems2 in rawArr:
        Processed=[]
        Processed.append(elems2[0])
        Processed.append(elems2[1])
        Processed.append(elems2[2])
        Processed.append(elems2[3])

        processedScore=elems2[4].split(":")

        numMems=len(processedScore)
        maxScore=numMems*15

        justNums=[]
        for b in processedScore:
            temp=b.split(",")
            del temp[0]
            justNums=justNums+temp

        justNumsInts=list(map(int,justNums))
        totalEarned=sum(justNumsInts)

        normalizedScore=totalEarned/maxScore

        Processed.append(str(normalizedScore))
        ProcessedFull.append(Processed)
        student+=1;

    createCSV(ProcessedFull)







if "__name__==__main__": process()
