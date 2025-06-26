try:
    guess = int(input("Enter a number: "))
    print(f"You guessed {guess}")
except ValueError:
    print("Please enter a valid number.")
