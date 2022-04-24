de_list = list ('Die baltischen Länder Litauen und Lettland hattenim vergangenen Jahr die Ausstrahlung unter anderem von Russia Todaygesperrt und dies damit begründet, dass Dmitri Kisseljow alsGeneraldirektor der StaatsagenturRossija Segodnja (Russland heute) auf der EU-Sanktionsliste steht.')
print (sorted(de_list))
total = 0
for elem in de_list:
    if elem == 'e':
        total +=1
print(total)
    
       