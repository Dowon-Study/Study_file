import yfinance as yf

class Rsi:
    def __init__(self):
        self.data = yf.download('005930.KS', start='2010-01-01')
        self.data_list = []
        self.first_data = 0 
        self.AU = 0
        self.AD = 0
        self.RSI = 0
        self.day = 0

    def rsi_setting(self):
        for i in self.data['Close']:
            self.data_list.append(i)

        self.first_data = self.data_list[0]

        stock_data = []

        money = 10000000
        stock = 0

        for k in self.data_list:

            Up = 0
            Down = 0
            count_u = 0
            count_d = 0

            erro = self.first_data - k

            stock_data.append(erro)

            self.first_data = k
            self.day += 1

            if len(stock_data) == 15:
                for i in stock_data:
                    if i > 0:
                        Up += i
                        count_u += 1
                    if i < 0:
                        Down += i
                        count_d += 1

                self.AU = Up/count_u
                self.AD = -Down/count_d
                self.RSI = self.AU / (self.AU + self.AD)

                if(self.RSI > 0.7):
                    money += stock * self.data_list[self.day - 1]
                    stock = 0
                if(self.RSI < 0.3):
                    if (money - (stock * self.data_list[self.day - 1]) > 0 ):
                        stock += money // self.data_list[self.day - 1]
                        money -= stock * self.data_list[self.day - 1]

                print("RSI : ",self.RSI)
                print("stock : ", stock)
                print("money : ",money)

                for i in range(0,5):
                    del stock_data[0]
        money += stock * self.data_list[self.day - 1]
        print("money : ", money)

rst1 = Rsi()

rst1.rsi_setting()
