# STAR

def show_star(rows):
    counter = 1
    while counter <= rows:
        print("*" * counter)
        counter += 1

    for i in range(1, rows+1):
        print("*" * i)

show_star(5)