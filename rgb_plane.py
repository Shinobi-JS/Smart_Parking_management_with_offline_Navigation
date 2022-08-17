# import cv2
# import numpy as np

# img = cv2.imread('./images/IMGKHR34K9060fHJk7H8ksUjn.jpeg')
# img = cv2.resize(img, (0, 0), fx = 0.5, fy = 0.5)
# cv2.imshow("img",img)
# r = img.copy()
# r[:,:,0] = r[:,:,1] = 0

# g = img.copy()
# g[:,:,0] = g[:,:,2] = 0

# b = img.copy()
# b[:,:,1] = b[:,:,2] = 0

# cv2.imshow("red",r)
# cv2.imshow("green",g)
# cv2.imshow("blue",b)
# cv2.waitKey(0)
# cv2.destroyAllWindows()


# Method 2: split channels and merge with black channels
# b,g,r = cv2.split(img)
# k = np.zeros_like(b)
# b = cv2.merge([b,k,k])
# g = cv2.merge([k,g,k])
# r = cv2.merge([k,k,r])

# cv2.imshow("red",r)
# cv2.imshow("green",g)
# cv2.imshow("blue",b)
# cv2.waitKey(0)
# cv2.destroyAllWindows()

# save results
# cv2.imwrite("mandril3_red.jpg", r)
# cv2.imwrite("mandril3_green.jpg", g)
# cv2.imwrite("mandril3_blue.jpg", b)

n = int(input())
l=[]
m=[]
for i in range(n):
    l.append(int(input()))

z=1
lsum=0
rsum=0
for j in range(n-2):
    for a in range(z):
        lsum+= l[a]
    for b in range(z+1,n):
        rsum+=l[b]
    if(lsum==rsum):
        m.append(z)
    lsum=0
    rsum=0    
   
    z+=1
print(min(m))                 