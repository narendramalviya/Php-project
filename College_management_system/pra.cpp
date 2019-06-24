#include<iostream>
using namespace std;
static class A{
    public:
       string name ="nare";

};
class B{
     private :
      void fun(){
          cout<<name;
      }
};
int main(){
    cout<<name;
   

    return 0;
}