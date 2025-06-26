fHandle = open("data.txt", "r")
star = fHandle.read()
words = star.split()

occur = {}
for word in words:
    lower_word = word.lower()
    if lower_word in occur:
        occur[lower_word] += 1
    else:
        occur[lower_word] = 1
    
    # print(occur)

no_duplicate = []
duplicate = []

for a in occur:
    if occur[a] == 1:
        no_duplicate.append(a)
    else:
        duplicate.append(a)

print("Words without duplicates:")
print(no_duplicate)

print()
print()
print("Duplicates found:")
print(duplicate)