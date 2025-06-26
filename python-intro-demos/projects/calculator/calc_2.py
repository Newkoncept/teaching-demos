def check(a,b):
    try:
        int(a)
        int(b)
    except:
        return False
    else:
        return True


def calculator(num1, num2, sign):
    result = check(num1, num2)

    if result == True:
        num1 = int(num1)
        num2 = int(num2)
        if sign == "+":
            result = num1 + num2
        elif sign == "-":
            result = num1 - num2
        elif sign == "*":
            result = num1 * num2
        elif sign == "/":
            result = num1 / num2

        return result
    else:
        return False


def show_result(num1, num2, operator):
    answer = calculator(num1, num2, operator)

    if answer == False:
        print("Expecting digits only")
    else:
        print(f"{num1} {operator} {num2} = {answer}")


