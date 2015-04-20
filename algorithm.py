import sys
from random import randint
from random import shuffle

args = sys.argv[1:]
ints = []
words = []
mix = []
finalChars = []

#lookup table
numlookup = [")","!","@","#","$","%","^","&","*","("]
digs = ['1','2','3','4','5','6','7','8','9','0']
delimiter = ['','.','-','_','~','=','+']
ending = ['','?','.','!']

def isInt(s):
    try: 
        int(s)
        return True
    except ValueError:
        return False
		
def numProcess(i):
	if len(i)==1:
		processed = numberCap(i)
	elif len(i)<=5:
		cap1 = numberCap(i)
		cap2 = numberCap(i)
		processed = (cap1+cap2)
	else:
		processed = (numberCap(i))
	return processed
		
def int1dig(i):
	a=0
	if i=="0":
		a=0
	elif i=="1":
		a=1
	elif i=="2":
		a=2
	elif i=="3":
		a=3
	elif i=="4":
		a=4
	elif i=="5":
		a=5
	elif i=="6":
		a=6
	elif i=="7":
		a=7
	elif i=="8":
		a=8
	elif i=="9":
		a=9
	return a
		
def numberCap(n):
	final = ""
	for i in n:
		if randint(0,1)==0:
			a=int1dig(i)
			final += numlookup[a]
		else:
			final += i
	return final
	
def wordProcess(s):
	final = ""
	#pick the mode
	'''
	1. remove vowels w/ random caps
	2. replace e w/3, i w/1, l w/1, o w/0, s w/5
	3. both
	4. semi 1
	5. 2+4
	'''
	random = randint(1,5)
	if random==1:
		#mode 1
		q = s.lower()
		q=q.replace("a",'')
		q=q.replace('e','')
		q=q.replace('i','')
		q=q.replace('o','')
		q=q.replace('u','')
		for i in q:
			if randint(0,1)==0:
				final += i.upper()
			else:
				final += i.lower()
				
	elif random==2:
		#mode 2
		q = s.lower()
		if randint(0,1)==1:
			q=q.replace('e','3')
		if randint(0,1)==1:
			q=q.replace('l','1')
		if randint(0,1)==1:
			q=q.replace('i','1')
		if randint(0,1)==1:
			q=q.replace('o','0')
		if randint(0,1)==1:
			q=q.replace('s','5')
		
		for i in q:
			if randint(0,1)==0:
				final += i.upper()
			else:
				final += i.lower()
	elif random==3:
		#mode 3 (combination of 1 and 2)
		q = s.lower()
		q=q.replace('a',"")
		q=q.replace('e','')
		q=q.replace('i','')
		q=q.replace('o','')
		q=q.replace('u','')
		
		if randint(0,1)==1:
			q=q.replace('l','1')
		if randint(0,1)==1:
			q=q.replace('i','1')
		if randint(0,1)==1:
			q=q.replace('o','0')
		if randint(0,1)==1:
			q=q.replace('s','5')
		
		for i in q:
			if randint(0,1)==0:
				final += i.upper()
			else:
				final += i.lower()
	elif random==4:
		q = s.lower()
		if randint(0,1)==1:
			q=q.replace('a','')
		if randint(0,1)==1:
			q=q.replace('e','')
		if randint(0,1)==1:
			q=q.replace('i','')
		if randint(0,1)==1:
			q=q.replace('o','')
		if randint(0,1)==1:
			q=q.replace('u','')
			
		for i in q:
			if randint(0,1)==0:
				final += i.upper()
			else:
				final += i.lower()
	else:
		q = s.lower()
		
		if randint(0,1)==1:
			q=q.replace('a','')
		if randint(0,1)==1:
			q=q.replace('e','')
		if randint(0,1)==1:
			q=q.replace('i','')
		if randint(0,1)==1:
			q=q.replace('o','')
		if randint(0,1)==1:
			q=q.replace('u','')
		
		if randint(0,1)==1:
			q=q.replace('e','3')
		if randint(0,1)==1:
			q=q.replace('l','1')
		if randint(0,1)==1:
			q=q.replace('i','1')
		if randint(0,1)==1:
			q=q.replace('o','0')
		if randint(0,1)==1:
			q=q.replace('s','5')
		
		for i in q:
			if randint(0,1)==0:
				final += i.upper()
			else:
				final += i.lower()
	return final
	
def mixProcess(m):
	final = []
	for i in m:
		if i.isalpha():
			final.append(wordProcess(i))
		elif i in digs:
			final.append(numProcess(i))
	a = ''.join(final)
	return a
		
if __name__=="__main__":
# Sort the args
	for i in args:
		i = i.replace(" ","")
		if isInt(i):
			ints.append(i)
		elif i.isalpha():
			words.append(i)
		else:
			mix.append(i)
# Begin awesomeness
	#ints
	for int in ints:
		a = numProcess(int)
		finalChars.append(a)

	#alpha
	for word in words:
		a = wordProcess(word)
		finalChars.append(a)

	#mix
	for m in mix:
		a = mixProcess(m)
		finalChars.append(a)
	shuffle(finalChars)
	d = delimiter[randint(0,len(delimiter)-1)]
	e = ending[randint(0,len(ending)-1)]
	#print("Delimiter:\t"+d)
	#print("End Character:\t"+e)
	password = d.join(finalChars)+e
	#print("Password: "+password)
	print(password)