# import cv2
# img1 = cv2.imread('./images/HEO.jpeg')
# img2 = cv2.imread('./images/HEHO.jpeg')
# img3 = cv2.imread('./images/HE_output.jpeg')
# img4 = cv2.imread('./images/HE_output_graph.jpeg')
# # img4 = cv2.imread('./images/lv16.jpeg')
# # img5 = cv2.imread('./images/lv8.jpeg')
# img1 = cv2.resize(img1, (0, 0), fx = 0.8, fy = 0.8)
# # img2 = cv2.resize(img2, (0, 0), fx = 0.3, fy = 0.3)
# # img3 = cv2.resize(img3, (0, 0), fx = 0.3, fy = 0.3)
# # img4 = cv2.resize(img4, (0, 0), fx = 0.3, fy = 0.3)
# # img5 = cv2.resize(img5, (0, 0), fx = 0.3, fy = 0.3)
# cv2.imshow("h1",img1)
# cv2.imshow("h2",img2)
# cv2.imshow("h3",img3)
# cv2.imshow("h4",img4)
# # cv2.imshow("lv 16",img4)
# # cv2.imshow("lv 8",img5)
# cv2.waitKey(0)
# cv2.destroyAllWindows()
# m=int(input())
# for k in range(m):
n = int(input())

l=[]
l1=[]

l = list(map(int, input().split()))

l1=set(l)
print(l1)
l1=list(l1)
l2=[]
for j in range(len(l1)):
    l2.append(0);
z=0
for i in range(n):
    if(i==0):
        l2[l1.index(l[i])]+=1;
    elif(i==(n-1)):
        if(l[i]!=l[i-1]):
            l2[l1.index(l[i])]+=1;
    else:
        if(l[i]!=l[i-1]):
            l2[l1.index(l[i])]+=1;
m = int(input("enter: "))
for i in range(58):
    switch()


            


print(l2)
print(l1[l2.index(max(l2))])
































