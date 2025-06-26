print('Title: Imole De By Dunsin Oyekan') # TITLE: IMOLE DE by Dunsin Oyekan
artistName = 'Dunsin Oyekan' # This is the name of the artist for the song
contentRating = 4.5 # The rating for the song
lyricsUrl = 'https://muslyrics.com/lyrics/imole-de/' # Song lyrics url


def rating():
    global contentRating
    print('The rating is: ', contentRating)


def name():
    global artistName
    print('The artist name is: ', artistName)


def url():
    global lyricsUrl
    print('To get the song lyrics go to ', lyricsUrl)


def checkRating():
    global contentRating
    if contentRating > 3:
        print(True)
    else:
        print(False)


rating()
name()
url()
checkRating()
