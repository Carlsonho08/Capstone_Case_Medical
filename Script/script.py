import cv2

# 0 for grayscale, -1 for color
img = cv2.imread('Images/test_image1.jpeg', 0)

# resizing image. fx, fy. multiplies the pixels by this number, >1 shrink <1 increases
img = cv2.resize(img, (0, 0), fx=1.5, fy=1.5)

# rotate the image 90 degrees clockwise
img = cv2.rotate(img, cv2.cv2.ROTATE_90_CLOCKWISE)

# writes a new image
cv2.imwrite('new_image1.jpeg', img)
cv2.imshow('test_image1.jpeg', img)

# prints pixel values of the image, height and width
banana = str(img.shape)
print("Height, Width: " + banana)

# pixel values in the numpy array
print(img[0])

cv2.waitKey(0)
cv2.destroyAllWindows()