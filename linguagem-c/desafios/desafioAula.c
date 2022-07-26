#include <stdio.h>

int main() {
  int x,soma,f;
  soma = 0;
  f = 10;

  for (x = 1; x < f; x++) {
    if (x % 2 == 0) {
      f -= 1;
    }
    soma = x + f;
    x++;
  }

  printf("Valor de x = %d\n", x);
}