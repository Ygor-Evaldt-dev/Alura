#include <stdio.h>
#include <stdlib.h>
#include <windows.h>
#include <string.h>

int main() {
  UINT CPAGE_UTF8 = 65001;
  SetConsoleOutputCP(CPAGE_UTF8);

  printf("=-=-=-=-=--=-=-=-=-=-=-=\n");
  printf("     JOGO DA FORCA      \n");
  printf("=-=-=-=-=-=-=-=-=-=-=-=-\n\n");

  int chutes = 5;
  char palavraSecreta[20];
  sprintf(palavraSecreta, "Melancia");
 
  

  return 0;
}
  