import sys
num = input()
stack = []
result = []
for i in range(0,int(num)):
    a = sys.stdin.readline()
    ter = a.split()
    if(ter[0] == "push"):
        stack.append(ter[1])
    if(ter[0] == "pop"):
        if (len(stack) == 0):
            result.append(-1)
        else:
            result.append(stack[len(stack) - 1])
            del stack[len(stack) - 1]
    if(ter[0] == "size"):
        result.append(len(stack))
    if(ter[0] == "top"):
        if(len(stack) == 0):
            result.append(-1)
        else:
            result.append(stack[len(stack) - 1])
    if(ter[0] == "empty"):
        if(len(stack) == 0):
            result.append(1)
        else:
            result.append(0)
for i in result:
    print(i)
