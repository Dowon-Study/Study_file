def wow(a, b):
    if (len(a) == 1):
        return int(a)
    if (len(a) == 2):
        return int(a)
    sum = 0
    b = int(b)
    su = ""
    for i in a:
        if (48 <= ord(i) <= 57):
            su += i
        else:
            su += " " + i + " "
    su = su.split(" ")
    su = ' '.join(su).split()
    k = su
    k_1 = len(k)
    m = []
    for i in range(0,k_1):
        try:
            if (k[i] == '*' and k[i+1] == '*'):
                m.append(k[i+2])
                del k[i]
                del k[i]
                del k[i]
        except:
            break
    def f_1(x,z):
        x = int(x)
        z = int(z)
        k = x**z
        return k
    p = []
    m_1 = len(m)
    p.append(int(b))
    if (k[0] == '(' or k[0] == '{' or k[0] == '['):
        count_2 = 0
        for o in k:
            count_2 += 1
            if (o == 'x'):
                count_3 = count_2
        if (k[count_3] == '+'):
            b += int(k[count_3 + 1])
            del k[count_3]
            del k[count_3]
        if (k[count_3] == '-'):
            b -= int(k[count_3 + 1])
            del k[count_3]
            del k[count_3]
        del k[0]
        count = 0
        for m in k:
            if (m == ')' or m == '}' or m == ']'):
                count_1 = count
            count += 1
        del k[count_1]
    for i in range(0,m_1):
        p.append(f_1(b,i + 2))
    p_1 = len(p)
    l = 1
    if (k[0] == 'x'):
        sum += int(p[p_1 - l])
        del k[0]
        l += 1
        if (48 <= ord(k[1]) <= 57):
            if (k[0] == '+'):
                sum += int(k[1])
                return sum
            if (k[0] == '-'):
                sum -= int(k[1])
                return sum
        if (len(k) == 0):
            return int(sum)
    if (k[0] == '-' and k[1] == 'x'):
        sum -= int(p[p_1 - l])
        del k[0]
        del k[0]
        l += 1
        if (len(k) == 0):
            return int(sum)
    if (k[0] == '-' and k[2] == 'x'):
        sum -= int(p[p_1 - l]) * int(k[1])
        del k[0]
        del k[0]
        del k[0]
        l += 1
        if (len(k) == 0):
            return int(sum)
    while (1):
        try:
            if (k[0] == '+'):
                if (len(k) == 2):
                    sum += int(k[1])
                    del k[0]
                    del k[0]
                    break
                if(k[1] == 'x'):
                    sum += p[p_1 - l]
                    del k[0]
                    del k[0]
                    l += 1
                else:
                    sum += int(k[1]) * p[p_1 - l]
                    del k[0]
                    del k[0]
                    del k[0]
                    l += 1
            if (k[0] == '-'):
                if (len(k) == 2):
                    sum -= int(k[1])
                    del k[0]
                    del k[0]
                    sum -= int(k[1])
                    break
                if (k[1] == 'x'):
                    sum -= p[p_1 - l]
                    del k[0]
                    del k[0]
                    l += 1
                else:
                    sum -= int(k[1]) * p[p_1 - l]
                    del k[0]
                    del k[0]
                    del k[0]
                    l += 1
            if (len(k) == 0):
                break
            else:
                sum += int(k[0]) * p[p_1 - l]
                del k[0]
                del k[0]

        except:
            break
    return sum

# --------------------------------------------#

a_1 = '(x-1)**2'
b_1 = '-3x+1'
c_1 = 'y'

if (c_1 == 'y'):
    a_2 = 'x-2'
    b_2 = '4'

a_3 = '(x+1)**2*(x-2)'
b_3 = '1'


a__3 = 0
try:
    while 1:
        if (wow(a_2,a__3) == 0):
            a__4 = a__3
            break
        a__3 += 1

    num = wow(b_2, a__4)
except:
    pass

def no(a,b,c,x):
    y = a*x**2+b*x+c
    
