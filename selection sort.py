#selection sort


liste = [11,2,45,3,44,5,46]

for i in range(len(liste)):
    k = liste[i]
    for e in range(i+1,len(liste),1):
        if liste[i] > liste[e]:
            liste[i],liste[e] = liste[e],k
             



print(liste)




