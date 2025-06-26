# SPEED CHECKER

speed = int(input("Enter speed: "))
limit = 70
if speed <= limit:
    print("OK")
else:
    points = (speed - limit) // 5

    if points < 12:
        print(f"Points: {points}")
    else:
        print(f"Your Point is {points}, so license suspended")
