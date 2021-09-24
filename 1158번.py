count, num = map(int, input().split())
stack = [i for i in range(1, count+1)]
result = []
num_1 = num-1
while len(stack):
    if num_1 >= len(stack):
        num_1 = num_1 % len(stack)
    else:
        result.append(str(stack.pop(num_1)))
        num_1 += (num-1)
print("<", ", ".join(result), ">", sep='')
