#include<bits/stdc++.h>
using namespace std;
typedef long long lint;
#define p 1000000007

lint dp[200200];
int main(){
	dp[0]=1;
	for(int i=1;i<=100000;i++){
		dp[i]=dp[i-1]*i;
		dp[i]%=p;
	}
	int ncase;
	scanf("%d",&ncase);
	while(ncase--){
		int n;
		scanf("%d",&n);
		printf("%lld\n",dp[n]);
	}
}
