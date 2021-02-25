import re
import os
import csv
define_pattern = re.compile(r"""\bdefine\(\s*('|")(.*)\1\s*,\s*('|")(.*)\3\)\s*;""")
assign_pattern = re.compile(r"""(^|;)\s*\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\s*=\s*('|")(.*)\3\s*;""")


for root, dirs, files in os.walk(r'C:\xmltocsv\cdwr2\coldwar2translation-main', topdown=False):
    for name in files:
        print (name)
        php_vars = {}
        if '.php' in name:
            with open(name,encoding='utf-8') as file:
                for line in file:
                    for match in define_pattern.finditer(line):
                        php_vars[match.group(2)]=match.group(4)
                    for match in assign_pattern.finditer(line):
                        php_vars[match.group(2)]=match.group(4)
                print (name,'Length is ',len(php_vars))
            with open(name[:-4]+'.csv','w',encoding='utf-8',newline='') as csv_file:
                csv_writer = csv.writer(csv_file)
                for v in php_vars:
                    csv_writer.writerow([v,php_vars[v]])
