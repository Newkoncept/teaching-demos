shoes = {42:3, 41:4, 40:2, 39:1, 38:0}

while(True):
    size = int(input('What shoe size do you want to buy: '))
    if shoes[size] == 0:
        print('Shoe size out of stock, please try a different size. \nThese are the available size')
        for shoe in shoes:
            if shoes[shoe] > 0:
                print(shoe)
    else:
        shoes[size] -= 1
        print(shoes)



