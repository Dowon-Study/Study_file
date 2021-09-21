import sys
num = input()
result = []
ter_no = True
stack = []
count = 0
for i in range(0,int(num)):
    a = sys.stdin.readline()

    while count < int(a):
        count += 1
        stack.append(count)
        result.append("+")

    if stack[-1] == int(a):
        stack.pop()
        result.append("-")
    else:
        ter_no = False
        break

if(ter_no == False):
    print("NO")
else:
    for i in result:
        print(i)
