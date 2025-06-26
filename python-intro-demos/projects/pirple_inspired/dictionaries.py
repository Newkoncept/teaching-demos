# TITLE: IMOLE DE by Dunsin Oyekan
favSong = {
    'songTitle': 'Imole De',
    'artistName': 'Dunsin Oyekan',
    'year': 2018,
    'genre': 'Gospel',
    'totalSongLength': '6:31',
    'lengthInMinutes': 6,
    'lengthInSeconds': 391,
    'contentRating': 4.5,
    'lyricsUrl': 'https://muslyrics.com/lyrics/imole-de/'
}

for detail in favSong:
    print(detail, ':', favSong[detail])

print('******************************************************')
print('******************************************************')


def guess(key, value):
    if key in favSong:
        if value is favSong[key]:
            print('Congratulations, your guess is correct')
        else:
            print('Wrong value guess, try again')
    else:
        print('Wrong key guess, try again')


guess("songTitle", 'Imole De')
guess("genre", 'Imole De')
guess("limit", 2)
