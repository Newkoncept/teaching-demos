# TEXT CHARACTER FINDER

fHandle = open("data.txt", "r")
star = fHandle.read()
words = star.split()

occurence = {}

for i in words:
    i = i.lower()
    if i in occurence:
        occurence[i] += 1
    else:
        occurence[i] = 1

for value in occurence:
    print(f"{value} : {occurence[value]}")


print()
print()
print()
print()

print(f"Total word checked: {len(occurence)}")
# print(occurence)