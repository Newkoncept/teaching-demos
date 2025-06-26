print('**************** FIZZ BUZZ ****************')
length = 100  # total length of the number to be printed
for i in range(1, length+1):
    # checking for multiple between number 5 and 3
    if i % 5 == 0 and i % 3 == 0:
        print('FizzBuzz')
        continue
    # checking for multiple of number 5
    elif i % 5 == 0:
        print('Buzz')
        continue
    # checking for multiple of number 3
    elif i % 3 == 0:
        print('Fizz')
    else:
        print(i)
