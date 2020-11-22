#!/usr/bin/python3
import re
def main():
  my_file = open("/var/log/aprx-rf.log", "r")
  content = my_file.read()
  exp = "([vV][eEaAyYoO][0-9][a-z,A-Z][a-z,A-Z]*[a-z,A-Z])"
  results = re.findall(exp,content)
  my_file.close()
  results.sort()
  results = [x.upper() for x in results]
  unique(results)

def unique(list1): 
    # intilize a null list 
    unique_list = [] 
    # traverse for all elements 
    for x in list1: 
        # check if exists in unique_list or not 
        if x not in unique_list: 
            unique_list.append(x) 
    # print list 
    for x in unique_list: 
        print(x)
if __name__ == "__main__":
  """Main Funtion"""
  main()
