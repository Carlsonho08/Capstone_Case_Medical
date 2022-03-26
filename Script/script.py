import numpy as np
import cv2
import matplotlib.pyplot as plt
# # load image, 0 for grayscale, -1 for color
# img = cv2.imread('Images/prefinal sheet.jpg', 0)
# # load template image to look for in first image
# template = cv2.imread('Images/finalsheet.jpg', 0)
# height, width = template.shape

# # different methods for template matching
# methods = [cv2.TM_CCOEFF, cv2.TM_CCOEFF_NORMED, cv2.TM_CCORR,
#             cv2.TM_CCORR_NORMED, cv2.TM_SQDIFF, cv2.TM_SQDIFF_NORMED]

# for method in methods:
#     img2 = img.copy()

#     # performs convolution
#     result = cv2.matchTemplate(img2, template, method)

#     # returns min max values in the array, min max locations in the array
#     min_val, max_val, min_loc, max_loc = cv2.minMaxLoc(result)
#     if method in [cv2.TM_SQDIFF, cv2. TM_SQDIFF_NORMED]:
#         location = min_loc
#     else:
#         location = max_loc

#     # forming the rectangle around the template image
#     bottom_right = (location[0] + width, location[1] + height)
#     cv2.rectangle(img2, location, bottom_right, 255, 2)


image = cv2.imread('Images/diff.png')
gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
 
blur = cv2.GaussianBlur(gray, (11, 11), 0)
canny = cv2.Canny(blur, 30, 150, 3)
dilated = cv2.dilate(canny, (1, 1), iterations=0)
 
(cnt, hierarchy) = cv2.findContours(
    dilated.copy(), cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_NONE)
rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
cv2.drawContours(rgb, cnt, -1, (0, 255, 0), 2)
 
plt.imshow(rgb)
print("hole count : ", len(cnt))

#cv2.imshow('Template Matching', img2)
cv2.waitKey(0)
cv2.destroyAllWindows()
    