import numpy as np
import cv2

# load image, 0 for grayscale, -1 for color
img = cv2.imread('Images/test_image1.jpeg', 0)
# load template image to look for in first image
template = cv2.imread('Images/blue.jpeg', 0)
height, width = template.shape

# different methods for template matching
methods = [cv2.TM_CCOEFF, cv2.TM_CCOEFF_NORMED, cv2.TM_CCORR,
            cv2.TM_CCORR_NORMED, cv2.TM_SQDIFF, cv2.TM_SQDIFF_NORMED]

for method in methods:
    img2 = img.copy()

    # performs convolution
    result = cv2.matchTemplate(img2, template, method)

    # returns min max values in the array, min max locations in the array
    min_val, max_val, min_loc, max_loc = cv2.minMaxLoc(result)
    if method in [cv2.TM_SQDIFF, cv2. TM_SQDIFF_NORMED]:
        location = min_loc
    else:
        location = max_loc

    # forming the rectangle around the template image
    bottom_right = (location[0] + width, location[1] + height)
    cv2.rectangle(img2, location, bottom_right, 255, 2)

    cv2.imshow('Template Matching', img2)
    cv2.waitKey(0)
    cv2.destroyAllWindows()
    