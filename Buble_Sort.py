a = [11,5,22,44,23,9,1]

for k in range(len(a)):
    for i in range(0,len(a)-1-k,1):
        if ( a[i] > a[i+1]):
            a[i] , a[i + 1] = a[i+1],a[i]
