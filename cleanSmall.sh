#!/bin/bash
cd saves
while sleep 1; do
find -type f -size -1024c -exec rm {} +;
done
