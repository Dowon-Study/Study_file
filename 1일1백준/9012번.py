import sys
num = input()
result = []
for i in range(0,int(num)):
    count = 0
    a = sys.stdin.readline()
    ter = list(a)
    del ter[len(a) - 1]
    for i in range(0,len(ter)):
        if(ter[i] == ")"):
            for k in range(0,i + 1):
                if(ter[i - k] == "("):
                    ter[i] = 0
                    ter[i - k] = 0
                    break
    for i in ter:
        if(i == 0):
            count += 1
    if(len(ter) == count):
        result.append("YES")
    else:
        result.append("NO")
for i in result:
    print(i)
