import sys
num = int(sys.stdin.readline())
stack = []
for i in range(num):
    ter = sys.stdin.readline().split()

    if ter[0] == "push":
        stack.insert(0, ter[1])

    elif ter[0] == "pop":
        if len(stack) != 0: print(stack.pop())
        else: print(-1)

    elif ter[0] == "size":
        print(len(stack))

    elif ter[0] == "empty":
        if len(stack) == 0: print(1)
        else : print(0)

    elif ter[0] == "front":
        if len(stack) == 0: print(-1)
        else: print(stack[len(stack) -1])

    elif ter[0] == "back":
        if len(stack) == 0: print(-1)
        else: print(stack[0])
