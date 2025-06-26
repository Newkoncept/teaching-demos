def playBoard(rows, columns):
    rows, columns = int(rows), int(columns)  # ensuring the inputs are integers

    if rows > 31:  # checking the maximum input of the row
        print('*******ROW ERROR*******')
        print('Input too large, choose a number lower than 32')
        return False
    elif columns > 69:  # column maximum check
        print('*******COLUMN ERROR*******')
        print('Input too large, choose a number lower than 70')
        return False
    else:
        for row in range(rows):
            if row % 2 == 0:
                for column in range(1, columns + 1):
                    if column % 2 == 1:
                        if column != columns:
                            print(' ', end="")
                        else:
                            print(' ')
                    else:
                        print('|', end="")
            else:
                print('-' * columns)
        return True


playBoard(31, 67)
