# CALCULATOR
num1 = input("Enter the first value")
num2 = input("Enter the second value")
sign = input("Which operation do you want to perform +, -, *, /")

# print(int(num1) + int(num2))
# print(int(num1) - int(num2))
# print(int(num1) * int(num2))
# print(int(num1) / int(num2))
# print(int(num1) % int(num2))

if sign == "+":
    print(int(num1) + int(num2))
elif sign == "-":
    print(int(num1) - int(num2))
elif sign == "*":
    print(int(num1) * int(num2))
elif sign == "/":
    print(int(num1) / int(num2))