import sys
num = input()
result = []
for i in range(0,int(num)):
    a = sys.stdin.readline()
    ter = a.split()
    test = []
    for k in ter:
        sum = ''.join(reversed(k))
        test.append(sum)
        test.append(" ")
    result.append(''.join(test))
for i in result:
    print(i)
