#import the required modules
import cv2 as cv

# create img object to be read, second parameter is changing image transparency
img = cv.imread('Images/test_image1.jpeg', 0)

#allows you to display the image, first parameter 
# is the name output, second parameter is the img object
cv.imshow('Case', img)

#wait however many second, this case infinite seconds until user hits a button
#which will execute the next line of code
cv.waitKey(0)

#closes all the windows once we press a button, so that we don't have random
#windows opened
cv.destroyAllWindows() 