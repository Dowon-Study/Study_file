from pykrx import stock
import pandas as pd
import matplotlib.pyplot as plt

# 한글폰트 설정, 그래프 마이너스 표시 설정
import matplotlib
from matplotlib import font_manager, rc

matplotlib.rcParams['axes.unicode_minus'] = False

# 종목코드와 종목명 가져오기
stock_list = pd.DataFrame({'종목코드': stock.get_market_ticker_list(market="ALL")})

stock_list['종목명'] = stock_list['종목코드'].map(lambda x: stock.get_market_ticker_name(x))
stock_list.head()

# 2차전지 소재기업인 천보의 2021년 주가 데이터 가져오기
ticker = stock_list.loc[stock_list['종목명'] == '삼성전자', '종목코드']
df = stock.get_market_ohlcv_by_date(fromdate="20200101", todate="20210528", ticker=ticker)

# 칼럼명 영문명으로 변경
# 시가(Open), 고가(High), 저가(Low), 종가(Close), 거래량(Volume)
df = df.rename(columns={'시가': 'Open', '고가': 'High', '저가': 'Low', '종가': 'Close', '거래량': 'Volume'})

df['ma20'] = df['Close'].rolling(window=20).mean()  # 20일 이동평균
df['stddev'] = df['Close'].rolling(window=20).std()  # 20일 이동표준편차
df['upper'] = df['ma20'] + 2 * df['stddev']  # 상단밴드
df['lower'] = df['ma20'] - 2 * df['stddev']  # 하단밴드
df = df[19:]  # 20일 이동평균을 구했기 때문에 20번째 행부터 값이 들어가 있음

RSI = False
BB = False


# 볼린저밴드와 RSI기법을 합친 주식 투자 방법
class StockInvestment:
    def __init__(self):
        self.AU = 0
        self.AD = 0
        self.RSI = 0
        self.day = 0
        self.first_data = 0
        self.data_list_close = []
        self.data_list_upper = []
        self.data_list_lower = []
        self.data_list_sum = []

    def Investment_setting(self):

        count = 1

        # list에 close, upper, lower 저장
        for i in df['Close']:
            self.data_list_close.append(i)

        for j in df['upper']:
            self.data_list_upper.append(j)

        for k in df['lower']:
            self.data_list_lower.append(k)

        self.first_data = self.data_list_close[0]

        stock_data = []

        money = 10000000  # 주식투자 자금
        stock = 0  # 주식량

        for k in self.data_list_close:
            print(self.first_data)
            Up = 0
            Down = 0
            count_u = 0
            count_d = 0

            sum = 0  # 평균선 변수

            erro = self.first_data - k

            stock_data.append(erro)

            self.first_data = k
            self.day += 1
            # ----------#

            sum += k

            # -------- RSI값 구하기 --------#
            if len(stock_data) == 20:

                sum = sum / 20
                for i in stock_data:
                    if i > 0:
                        Up += i
                        count_u += 1
                    if i < 0:
                        Down += i
                        count_d += 1

                self.AU = Up / count_u
                self.AD = -Down / count_d

                self.RSI = self.AU / (self.AU + self.AD)

                # 매도타이밍
                if (self.RSI > 0.7):
                    if (self.data_list_close[self.day - 1] < self.data_list_upper[self.day - 1] and
                            self.data_list_close[self.day - 1] > self.data_list_lower[self.day - 1]):
                        money += stock * self.data_list_close[self.day - 1]
                        stock = 0
                # 매수타이밍
                if (self.RSI < 0.3):
                    if (self.data_list_close[self.day - 1] < self.data_list_upper[self.day - 1] and
                            self.data_list_close[self.day - 1] > self.data_list_lower[self.day - 1]):
                        if (money - (stock * self.data_list_close[self.day - 1]) > 0):
                            stock += money // self.data_list_close[self.day - 1]
                            money -= stock * self.data_list_close[self.day - 1]
                del stock_data[0]

                # 20일씩 초기화
                sum = sum * 20
                sum -= self.first_data

        # 남은 주식 현금화
        money += stock * self.data_list_close[self.day - 1]
        # 디버깅
        print("money : ", money)


# 테스트
test = StockInvestment()
test.Investment_setting()
