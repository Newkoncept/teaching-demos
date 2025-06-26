import random

phone_numbers = []


def number_generator():
    number = "+02280"

    for i in range(8):
        num = random.randint(0, 9)
        number += str(num)
    return number

fHandle = open("numbers.txt", "a")

for i in range(8):
    fHandle.write(number_generator() + "\n")


print("Random mobile number generator completed successfully")