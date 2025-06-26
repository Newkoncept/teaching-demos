# function that check the equality between two numbers. Between input a and b
def equality(a, b, c):
    a, b, c = int(a), int(b), int(c)

    if a >= b or a >= c:
        print(True)
    else:
        print(False)


# sample 1 = True
equality(3, "3", "2")

# sample 2 = True
equality(3, 4, 2)

# sample 3 = False
equality(3, 4, 4)

# sample 4 = False
equality(3, "10", 4)
