#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main() {
  int x, y;
  int multiplicacao;
  printf("Digite um valor inteiro para X? ");
  scanf("%d%*c", &x);
  printf("Digite um valor inteiro Y? ");
  scanf("%d%*c", &y);

  multiplicacao = (x * y); 
  printf("O total de %d x %d é igual a %d \n", x, y, multiplicacao);
  return 0;
}