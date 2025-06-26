# FIZZ BUZZ
num1 = int(input("enter a random number"))


def fizz_buzz(value):
    if value % 3 == 0 and value % 5 == 0:
        return "FIZZBUZZ"
    elif value % 3 == 0:
        return "FIZZ"
    elif value % 5 == 0:
        return "BUZZ"
    else:
        return value


print(fizz_buzz(num1))