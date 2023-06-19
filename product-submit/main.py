file = open("sql.txt","a")
datafile = open("data.txt","a")
while True:
	product= input("Product Name: ")
	if product== "0":
		break
	img= input("Product Image: ")
	price= input("Price: ")
	keywords= []
	while True:
		keyword= input("  Keywords: ")
		if (keyword== "" or keyword==" "):
			continue
		if keyword== "0":
			break
		keywords.append(keyword)

	for i in keywords:
		sql = "INSERT INTO product (name, img, price, keyword ) VALUES ('"+product+"', '"+img+"', '"+price+"','"+i+"');\n"
		data= product+"<split>"+img+"<split>"+price+"<split>"+i+"\n"
		file.write(sql)
		datafile.write(data)

