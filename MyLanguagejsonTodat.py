import json
t_list = []
with open(r'MyLanguage.json', encoding='utf-8-sig') as f:
    dat_list = json.load(f)
    for line in dat_list:
        if (not line['translation']):
            t_list.append(line['key']+"="+line['original']+'\n')
        else:
            t_list.append(line['key']+"="+line['translation']+'\n')

with open(r'Language.dat','w', encoding='utf-8') as r:
    for line in t_list:
        r.write(line)
