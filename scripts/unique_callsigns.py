#!/usr/bin/python3
import re


def main():
    """Main Function"""
    # Open File and read into content
    my_file = open("/var/log/aprx-rf.log", "r")
    content = my_file.read()
    # Set regex to find all canadian callsigns
    exp = "([vV][eEaAyYoO][0-9][a-z,A-Z][a-z,A-Z]*[a-z,A-Z])"
    # Load all found callsigns into results
    results = re.findall(exp, content)
    my_file.close()
    # Sort callsigns alphabetically
    results.sort()
    # Convert all callsigns too upper case
    results = [x.upper() for x in results]
    # Pare results to contain only unique callsigns
    unique(results)



def unique(my_list):
    """Return a list with all duplicate entries removed"""
    # intilize a null list
    unique_list = []
    # traverse for all elements
    for item in my_list:
        # check if exists in unique_list or not
        if item not in unique_list:
            unique_list.append(item)
    # print list
    for item in unique_list:
        print(item)


if __name__ == "__main__":
    """Main Funtion"""
    main()
