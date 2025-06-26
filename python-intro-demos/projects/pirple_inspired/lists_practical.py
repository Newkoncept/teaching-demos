print("********** MY TODO APP **********")
print('---------------------------------')
myUniqueList = []
myLeftovers = []


def addToList(a):
    if a in myUniqueList:
        myLeftovers.append(a)
        print(a, 'already added to the list')
        return False
    else:
        myUniqueList.append(a)
        print(a, 'successfully added to the list')
        return True


addToList("Go to school")
addToList("Visit www.pirple.com")
addToList("Wash dishes")
addToList("Walk the dog")
addToList("Go to school")  # error and to be sent to the myLeftOvers list
addToList("Play with my friends")
addToList("Go to church")
addToList("Eat dinner on time")
addToList("Go early to rehearsal")
addToList("Read for 3 hours least")
addToList("Go early to rehearsal")  # error and to be sent to the myLeftOvers list
addToList("Check my todo list")
addToList("Finish coding my assignment")


print(myUniqueList.count())

print()
print(myUniqueList)
