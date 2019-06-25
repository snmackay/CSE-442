
import mysql.connector

#connect to sql database, handle errors.
def connect():
    print ("beep")
    try:

        conn = mysql.connector.connect(
            host="tethys.cse.buffalo.edu",
            user="jeh24",
            passwd="50172309",
            database="cse442_542_2019_summer_teame_db"
        )
        if conn.is_connected():
            print("connection established.")
        else:
            print("connection failed.")
        return conn
    except Error as e:
        print(e)
    return conn


def process():
    mydb=connect()
    mycursor=mydb.cursor()
    mycursor.execute("Select Name, course, group_number, recieved_scores FROM cse442")

    myresult = mycursor.fetchall()

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
        elems[3]=elems[3][1:]
        elems[3]=elems[3][:-2]
        for b in elems:
            print(b)
        print(" ")


if "__name__==__main__": process()
