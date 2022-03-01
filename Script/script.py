import cv2 as cv

img = cv.imread('Images/test_image1.jpeg')

cv.imshow('Case', img)
cv.waitKey(0)